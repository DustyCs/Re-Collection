<?php

require_once __DIR__ . '/../src/BookRepository.php';

$books = BookRepository::getFiveBooks();

require __DIR__ . '/../src/views/books.php';
