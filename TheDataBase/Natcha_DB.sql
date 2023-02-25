CREATE TABLE `user`(
    `id` INT UNSIGNED NOT NULL,
    `user_id` VARCHAR(255) NOT NULL,
    `first_name` VARCHAR(255) NOT NULL,
    `last_name` VARCHAR(255) NOT NULL,
    `role` BIGINT NOT NULL,
    `lisence_plate` VARCHAR(255) NOT NULL,
    `credit` INT NOT NULL,
    `parking_space` INT NOT NULL,
    `is_active` TINYINT(1) NOT NULL,
    `working_from` TIME NOT NULL,
    `working_to` TIME NOT NULL,
    `phone_number` INT NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `email_answere` INT NOT NULL
);
ALTER TABLE
    `user` ADD PRIMARY KEY `user_id_primary`(`id`);
ALTER TABLE
    `user` ADD UNIQUE `user_user_id_unique`(`user_id`);
CREATE TABLE `parking_lot`(
    `parking_spot_number` BIGINT UNSIGNED NOT NULL,
    `is_free` TINYINT(1) NOT NULL,
    `user_id` VARCHAR(255) NOT NULL,
    `lisence_plate` VARCHAR(255) NOT NULL,
    `date` DATETIME NOT NULL,
    `in_time` TIMESTAMP NOT NULL,
    `out_time` TIMESTAMP NOT NULL,
    `expected_arrived_time` DATETIME NOT NULL
);
ALTER TABLE
    `parking_lot` ADD PRIMARY KEY `parking_lot_parking_spot_number_primary`(`parking_spot_number`);
CREATE TABLE `waiting_list`(
    `id` BIGINT UNSIGNED NOT NULL,
    `waiting` TINYINT(1) NOT NULL,
    `user_id` VARCHAR(255) NOT NULL,
    `lisence_plate` BIGINT NOT NULL,
    `date_put_on_list` DATETIME NOT NULL,
    `date_want_a_spot` DATETIME NOT NULL
);
ALTER TABLE
    `waiting_list` ADD PRIMARY KEY `waiting_list_id_primary`(`id`);
CREATE TABLE `guest`(
    `id` INT UNSIGNED NOT NULL,
    `first_name` VARCHAR(255) NOT NULL,
    `last_name` VARCHAR(255) NOT NULL,
    `lisence_plate` VARCHAR(255) NOT NULL,
    `phone` BIGINT NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `email_answere` INT NOT NULL,
    `reservation_date` DATETIME NOT NULL,
    `visiting_who` VARCHAR(255) NOT NULL
);
ALTER TABLE
    `guest` ADD PRIMARY KEY `guest_id_primary`(`id`);
CREATE TABLE `guest_waiting_list`(
    `id` BIGINT UNSIGNED NOT NULL,
    `lisence_plate` VARCHAR(255) NOT NULL,
    `date_put_on_list` TIMESTAMP NOT NULL,
    `date_want_parking` DATETIME NOT NULL
);
ALTER TABLE
    `guest_waiting_list` ADD PRIMARY KEY `guest_waiting_list_id_primary`(`id`);