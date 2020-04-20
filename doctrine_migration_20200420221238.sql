-- Doctrine Migration File Generated on 2020-04-20 22:12:38

-- Version 20200420134317
CREATE TABLE example_table (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id));
INSERT INTO doctrine_migration_versions (version, executed_at) VALUES ('20200420134317', CURRENT_TIMESTAMP);
