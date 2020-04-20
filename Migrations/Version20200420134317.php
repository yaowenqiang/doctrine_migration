<?php

declare(strict_types=1);

namespace MyProject\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200420134317 extends AbstractMigration
{
    public function getDescription(): string
    {
        return "my migrations";
    }

    public function up(Schema $schema): void
    {

        $this->addSql('CREATE TABLE example_table (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
//
//        // this up() migration is auto-generated, please modify it to your needs
//        $this->warnIf(true, "something is wrong!");
//        $this->abortIf(tru,  "somethinge badly happens");
//
//        $users = [
//            ['name' => 'mick', 'd' => 1],
//            ['name' => 'jack', 'd' => 2],
//            ['name' => 'james', 'd' => 3],
//        ];
//        foreach ($users as $user) {
//            $this->addSql('update user set happy = true where name = :name and id = :id', $user);
//        }
//
//        $this->write('migration succeed');

    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
//        $this->throwIrreversibleMigrationException();

        $this->addSql('drop table example_table');
    }


}
