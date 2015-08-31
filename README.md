Getting Started with BsForm
---------------------------
BsForm is the extension for building forms with LaravelCollective.com
BsForm uses form very simply, simplifies and extendings some function of FormBuilder in Collective\Html\HtmlServiceProvider::class
Of course, that you should be installed Laravel 5.1 :-)

1. Register in <strong>config/app.php</strong>
---------------------------------------------- 

All what you need to do is register new <strong>BsServiceProvider</strong>

    /* Application Service Providers...*/
    App\Providers\BsServiceProvider::class,

And at the end of the file <strong>config/app.php</strong>, add alias for <strong>BsForm</strong> like this:

    'BsForm'    => App\BsForm::class
    
2. Create Facade folder if does not exist yet
---------------------------------------------
Next you can create the folder for your facades in <strong>app folder</strong>. There will be place for BsFormFacade

    app / facade / BsFormFacade.php

3. BsForm class place
---------------------
Finally let's move to BsForm class. Recommanded place for this file is in app folder too.

    app / BsForm.php

How works with BsForm
---------------------
For example compare with LaraCollective:

    {!! Form::open(array('route' => 'route.name')) !!}   // LaraCollective
    {!! BsForm::bs_open( 'articles.store' ) !!}          // BsForm        
