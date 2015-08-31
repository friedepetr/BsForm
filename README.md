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
For example we want to create form for add new article on our blog: 

    {!! BsForm::bs_open( 'articles.store' ) !!}
    {!! BsForm::bs_text( 'article.author'           , [ 'label' => 'author:'   ]) !!}
    {!! BsForm::bs_text( 'article.title'            , [ 'label' => 'Title:'    ]) !!}
    {!! BsForm::bs_text( 'article.subtitle'         , [ 'label' => 'Subtitle:' ]) !!}
    {!! BsForm::bs_text( 'article.tags'             , [ 'label' => 'Tags:'     ]) !!}
    {!! BsForm::bs_text( 'article.content'          , [ 'label' => 'Content:'  ]) !!}
    {!! BsForm::bs_button( 'success' , 'Add new article' ) !!}
    {!! BsForm::bs_close() !!}
    
And what output?

    <form method='POST' action='http://horse.app/articles' accept-charset='UTF-8' id='form_articles'>
    <input type='hidden' name='_token' value='CfVgPOBqsRsc5eS9jDuJ33ZnA82TXLUR1J4p9Kvv'>
    
    <div class='form-group'>
    <label for='article_author'>Autor článku:</label>
    <input class='form-control' id='article_author' name='article_author' type='text' >
    </div>
    <div class='form-group'>
    <label for='article_title'>Titulek článku:</label>
    <input class='form-control' id='article_title' name='article_title' type='text' >
    </div>
    <div class='form-group'>
    <label for='article_subtitle'>Podtitulek článku:</label>
    <input class='form-control' id='article_subtitle' name='article_subtitle' type='text' >
    </div>
    <div class='form-group'>
    <label for='article_tags'>Tagy:</label>
    <input class='form-control' id='article_tags' name='article_tags' type='text' >
    </div>
    <div class='form-group'>
    <label for='article_content'>Obsah článku:</label>
    <input class='form-control' id='article_content' name='article_content' type='text' >
    </div>
    <button type='submit' class='btn btn-success'><i class='fa fa-check'></i> Přidat nový článek</button>
    </form>
