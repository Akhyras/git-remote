USE `lfl_fan`;
ALTER TABLE comments ADD created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP;
ALTER TABLE comments ADD review INT NOT NULL DEFAULT 3;