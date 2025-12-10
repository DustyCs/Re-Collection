CREATE TABLE books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    link VARCHAR(500) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO books (title, link) VALUES
('Clean Code', 'https://example.com/clean-code'),
('The Pragmatic Programmer', 'https://example.com/prag-prog'),
('Design Patterns', 'https://example.com/design-patterns'),
('Refactoring', 'https://example.com/refactoring'),
('Domain-Driven Design', 'https://example.com/ddd');
