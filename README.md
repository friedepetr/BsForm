Getting Started with BsForm
---------------------------

This Extension you can use very simply, with the Laravel framework 5.1

Register in <strong>config/app.php</strong>
---------------------------------------------- 

All what you need to do is register new BsServiceProvider

    /* Application Service Providers...*/
    App\Providers\BsServiceProvider::class,

And at the end of the file, into the alias, add alias for BsForm like this:

        
    
  'BsForm'    => App\BsForm::class
