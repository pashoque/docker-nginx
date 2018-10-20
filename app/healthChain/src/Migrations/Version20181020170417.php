<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181020170417 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        $this->addSql('
        CREATE TABLE activity (id INT AUTO_INCREMENT NOT NULL, patient_id INT DEFAULT NULL, doctor_id INT DEFAULT NULL, prev_hash VARCHAR(255) NOT NULL, next_hash VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, UNIQUE INDEX UNIQ_AC74095A6B899279 (patient_id), UNIQUE INDEX UNIQ_AC74095A87F4FB17 (doctor_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB;
     CREATE TABLE activity_files (activity_id INT NOT NULL, activity_file_id INT NOT NULL, INDEX IDX_183776EA81C06096 (activity_id), UNIQUE INDEX UNIQ_183776EA93990F8C (activity_file_id), PRIMARY KEY(activity_id, activity_file_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB;
     CREATE TABLE activity_file (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, file VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB;
     ALTER TABLE activity ADD CONSTRAINT FK_AC74095A6B899279 FOREIGN KEY (patient_id) REFERENCES fos_user (id);
     ALTER TABLE activity ADD CONSTRAINT FK_AC74095A87F4FB17 FOREIGN KEY (doctor_id) REFERENCES fos_user (id);
     ALTER TABLE activity_files ADD CONSTRAINT FK_183776EA81C06096 FOREIGN KEY (activity_id) REFERENCES activity (id);
     ALTER TABLE activity_files ADD CONSTRAINT FK_183776EA93990F8C FOREIGN KEY (activity_file_id) REFERENCES activity_file (id);
        ');

    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
