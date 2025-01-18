<?php
include 'access/Book.php';
include 'access/Reader.php';
include 'access/Library.php';

$library = new Library();
$book1 = new Book("Гарри Поттер и узник Азкабана", "Джоан Роулинг", 2021);
$book2 = new Book("Соглядатай", "Ален Роб-Грийе", 2001);
$reader = new Reader("Тест", "test@mail.ru");

$library->addBook($book1);
$library->addBook($book2);
$library->addReader($reader);

$reader->borrowBook($book1);
$reader->returnBook($book1);

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Система управления библиотекой</title>
</head>
<body>

<div class="main">
    <h2>Список книг в библиотеке:</h2>
    <div class="book-list">
        <?php
        $library->listBooks();
        ?>
    </div>
</div>

</body>
</html>


