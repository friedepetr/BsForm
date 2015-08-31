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
For example we want to create form for add new article on our blog ex. views / articles / create.blade.php : 

    {!! BsForm::bs_open( 'articles.store' ) !!}
    {!! BsForm::bs_text( 'article.author'           , [ 'label' => 'author:'   ]) !!}
    {!! BsForm::bs_text( 'article.title'            , [ 'label' => 'Title:'    ]) !!}
    {!! BsForm::bs_text( 'article.subtitle'         , [ 'label' => 'Subtitle:' ]) !!}
    {!! BsForm::bs_text( 'article.tags'             , [ 'label' => 'Tags:'     ]) !!}
    {!! BsForm::bs_text( 'article.content'          , [ 'label' => 'Content:'  ]) !!}
    {!! BsForm::bs_button( 'success' , 'Add new article' ) !!}
    {!! BsForm::bs_close() !!}
    
We expect in <strong>app / Http / routes.php</strong> is simply articles RESTful Resource:

    Route::resource('articles' , 'ArticlesController');

<strong>bs_open()</strong>

    {!! BsForm::bs_open( 'articles.store' ) !!}

First line contains two arguments, Eloquent model name and action from RESTful Resource Controllers. Method generated form with action corresponding with php artisan route:list { articles.store } like this:

    <form method='POST' action='http://something.app/articles' accept-charset='UTF-8' id='form_articles'>
    <input type='hidden' name='_token' value='CfVgPOBqsRsc5eS9jDuJ33ZnA82TXLUR1J4p9Kvv'>
    
<strong>bs_text()</strong>

    {!! BsForm::bs_text( 'article.author' , [ 'label' => 'author:' ]) !!}

Generated classic bootstrap input type text. So automatically create id and corresponding input name with database colum.

    <div class='form-group'>
    <label for='article_author'>Autor článku:</label>
    <input class='form-control' id='article_author' name='article_author' type='text' >
    </div>

<strong>bs_button()</strong>

    {!! BsForm::bs_button( 'success' , 'Add new article' ) !!}

This function create standard bootstrap button with predefined classes for fast using. First argument is the type of the button defined by class. You can use success, info, warning or danger for styling button. Each class add to the button font-awesome icon, ex. success adding check. The button is nicer :-)

    <button type='submit' class='btn btn-success'><i class='fa fa-check'></i> Přidat nový článek</button>
    </form>
