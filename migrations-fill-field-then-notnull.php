<?php

// passer d'un champ nullable, le remplir, le mettre not nullable

public function up(Schema $schema): void
{
    // this up() migration is auto-generated, please modify it to your needs
    $this->addSql('ALTER TABLE courier ADD courier_direction VARCHAR(10) NULL');
    $this->addSql("UPDATE courier SET courier_direction = 'incoming'");
    $this->addSql('ALTER TABLE courier ALTER COLUMN courier_direction SET NOT NULL');
}

