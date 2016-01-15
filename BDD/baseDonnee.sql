#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: profil_utilisateur
#------------------------------------------------------------

CREATE TABLE profil_utilisateur(
        id_utilisateur     int (11) Auto_increment  NOT NULL ,
        nom                Varchar (50) NOT NULL ,
        mdp                Varchar (50) NOT NULL ,
        mail               Varchar (50) NOT NULL ,
        sexe               Varchar (25) NOT NULL ,
        type_carte         Varchar (25) NOT NULL ,
        numero_carte       Varchar (25) NOT NULL ,
        date_expiration    Date NOT NULL ,
        date_naissance     Date NOT NULL ,
        telephone          Varchar (25) NOT NULL ,
        solde_compte       Varchar (25) ,
        adresse_expedition Longtext NOT NULL ,
        PRIMARY KEY (id_utilisateur )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: boutique_livre
#------------------------------------------------------------

CREATE TABLE boutique_livre(
        id_article int (11) Auto_increment  NOT NULL ,
        type       Varchar (25) NOT NULL ,
        titre      Varchar (25) NOT NULL ,
        auteur     Varchar (25) NOT NULL ,
        prix       Int NOT NULL ,
        PRIMARY KEY (id_article )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: boutique_musique
#------------------------------------------------------------

CREATE TABLE boutique_musique(
        id_article int (11) Auto_increment  NOT NULL ,
        type       Varchar (25) NOT NULL ,
        titre      Varchar (25) NOT NULL ,
        auteur     Varchar (25) NOT NULL ,
        prix       Int NOT NULL ,
        PRIMARY KEY (id_article )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: transaction
#------------------------------------------------------------

CREATE TABLE transaction(
        quantite                    Int NOT NULL ,
        date_achat                  Date NOT NULL ,
        etat                        Varchar (25) NOT NULL ,
        id_utilisateur              Int NOT NULL ,
        id_article                  Int NOT NULL ,
        id_article_boutique_musique Int NOT NULL ,
        PRIMARY KEY (id_utilisateur ,id_article ,id_article_boutique_musique )
)ENGINE=InnoDB;

ALTER TABLE transaction ADD CONSTRAINT FK_transaction_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES profil_utilisateur(id_utilisateur);
ALTER TABLE transaction ADD CONSTRAINT FK_transaction_id_article FOREIGN KEY (id_article) REFERENCES boutique_livre(id_article);
ALTER TABLE transaction ADD CONSTRAINT FK_transaction_id_article_boutique_musique FOREIGN KEY (id_article_boutique_musique) REFERENCES boutique_musique(id_article);
