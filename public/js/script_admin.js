$(document).ready(function () {
    // Глобальные переменные из CKEDITOR (используются в SaveArticle)
    window.description_short = CKEDITOR.replace( 'description_short' );
    window.description = CKEDITOR.replace( 'description' );
});


// Проверка обязательных полей при добавлении или редатировании материала
function SaveArticle() {

    let article_description_short =  window.description_short.getData();
    let article_description =  window.description.getData();

    let article_title = $('#article_title').val();

    let flag = '';
    if (article_title == '')
    {
        flag = "Обязательно заполнитете поле 'Заголовок'\n";
    }
    if (article_description_short == '')
    {
        flag = flag + "Обязательно заполнитете поле 'Краткое описание'\n";
    }
    if (article_description == '')
    {
        flag = flag + "Обязательно заполнитете поле 'Полное описание'\n";
    }

    if (flag != '') {
        swal("Вы заполнили не все поля!!", flag, "error");
    }
    else {
        $('#article-form').submit();
        console.log('Сохраняем значение!');
    }

}
