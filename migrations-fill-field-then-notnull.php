<?php

// passer d'un champ nullable, le remplir, le mettre not nullable

public function up(Schema $schema): void
{
    // this up() migration is auto-generated, please modify it to your needs
    $this->addSql('ALTER TABLE courier ADD courier_direction VARCHAR(10) NULL');
    $this->addSql("UPDATE courier SET courier_direction = 'incoming'");
    $this->addSql('ALTER TABLE courier ALTER COLUMN courier_direction SET NOT NULL');
}

public function up(Schema $schema): void
{
    // this up() migration is auto-generated, please modify it to your needs
    $this->addSql('ALTER TABLE courier_file_type ADD auto_generate_courier_file BOOLEAN');
    $this->addSql('UPDATE courier_file_type SET auto_generate_courier_file = false');
    $this->addSql('ALTER TABLE courier_file_type ALTER COLUMN auto_generate_courier_file SET NOT NULL');
}

public function up(Schema $schema): void
{
    // this up() migration is auto-generated, please modify it to your needs
    $this->addSql('ALTER TABLE courier ADD unique_reference_id INT NULL');
    $this->addSql('UPDATE courier SET unique_reference_id = id');
    $this->addSql('ALTER TABLE courier ALTER COLUMN unique_reference_id SET NOT NULL');
}

public function up(Schema $schema): void
{
    // this up() migration is auto-generated, please modify it to your needs
    $this->addSql('ALTER TABLE courier ADD name_to VARCHAR(255) DEFAULT NULL');
    $this->addSql('ALTER TABLE courier ALTER name_from DROP NOT NULL');
    $this->addSql("UPDATE courier SET name_to = name_from WHERE direction = 'outcoming'");
    $this->addSql("UPDATE courier SET name_from = NULL WHERE direction = 'outcoming'");
    $this->addSql('ALTER TABLE courier ALTER direction TYPE VARCHAR(100)');
}

public function up(Schema $schema): void
{
    // this up() migration is auto-generated, please modify it to your needs
    $this->addSql('ALTER TABLE chapter ADD version VARCHAR(255)');
    $this->addSql('UPDATE chapter SET version = \'api-platform-v2.6\'');
    $this->addSql('ALTER TABLE chapter ALTER COLUMN version SET NOT NULL');
}
