CREATE TABLE `school` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`school_code` VARCHAR( 20 ) NOT NULL ,
`school_name` VARCHAR( 100 ) NOT NULL ,
`inaugurated_date` DATE NOT NULL
) ENGINE = InnoDB;