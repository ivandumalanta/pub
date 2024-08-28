<?php namespace Makerspaceinnovhub\Makerspace\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use DB;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Mail;
use makerspaceInnovhub\Makerspace\Models\ContactFormEntry;
/**
 * Form Controller Backend Controller
 *
 * @link https://docs.octobercms.com/3.x/extend/system/controllers.html
 */
class FormController extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class,
    ];

    /**
     * @var string formConfig file
     */
    public $formConfig = 'config_form.yaml';

    /**
     * @var string listConfig file
     */
    public $listConfig = 'config_list.yaml';

    /**
     * @var array required permissions
     */
    public $requiredPermissions = ['makerspaceinnovhub.makerspace.formcontroller'];

    /**
     * __construct the controller
     */
    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Makerspaceinnovhub.Makerspace', 'makerspace', 'formcontroller');
    }

    
    public function sendRawEmail(Request $request)
    {
        session()->start();
       $request->validate([
            'firstname' => 'required|string|max:50',
            'lastname'=> 'required|string|max:50',
            'email'=> 'required|email',
            'subject'=> 'required|string|max:40',
            'message'=> 'required|string',
            '_token' => 'required|string'
        ]);

        // Process all validated data
        $data = $request->all();

        //Sanitize all validated data
        array_walk_recursive($data, function(&$data) {
            $data = strip_tags($data);
        });

        $emailContent = "<strong>Name: </strong>" . $data['firstname'] . "\n" . $data['lastname'] . "\n";
        $emailContent .= "\n" . "<strong>Email: </strong>" . $data['email'] . "\n";
        $emailContent .= "\n" . "<strong>Subject: </strong>" . $data['subject'] . "\n";
        $emailContent .= "\n" . "<strong>Message: </strong>" . "\n";
        $emailContent .= "\n" . $data['message'] . "\n";

        try {
            Mail::raw($emailContent, function ($message) use ($data) {
                $message->to('testmailmakerspace@gmail.com')
                ->replyTo($data['email'], $data['firstname'] . " " . $data['lastname'])
                ->subject($data['subject']);
            });
           
            ContactFormEntry::create([
                'firstname' => $data['firstname'],
                'lastname' => $data['lastname'],
                'email' => $data['email'],
                'subject' => $data['subject'],
                'message' => $data['message'],
            ]);

            return response()->json(['message' => 'Email sent successfully', 'code'=> 200], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Email sending failed', 'code' => 500], 500);
        }
 
    } 
}
