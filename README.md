Getting Started with BsForm
---------------------------
BsForm is the extension for building forms with LaravelCollective.com
This Extension you can use very simply

Register in <strong>config/app.php</strong>
---------------------------------------------- 

All what you need to do is register new <strong>BsServiceProvider</strong>

    /* Application Service Providers...*/
    App\Providers\BsServiceProvider::class,

And at the end of the file, into the alias, add alias for <strong>BsForm</strong> like this:

        
    
  'BsForm'    => App\BsForm::class
