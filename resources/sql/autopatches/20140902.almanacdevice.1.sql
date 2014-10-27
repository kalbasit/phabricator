CREATE TABLE {$NAMESPACE}_almanac.almanac_device (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  phid VARBINARY(64) NOT NULL,
  name VARCHAR(255) NOT NULL COLLATE utf8_bin,
  dateCreated INT UNSIGNED NOT NULL,
  dateModified INT UNSIGNED NOT NULL,
  UNIQUE KEY `key_phid` (phid)
) ENGINE=InnoDB, COLLATE utf8_bin;

CREATE TABLE {$NAMESPACE}_almanac.almanac_deviceproperty (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  devicePHID VARBINARY(64) NOT NULL,
  `key` VARCHAR(128) NOT NULL COLLATE utf8_bin,
  value LONGTEXT NOT NULL,
  dateCreated INT UNSIGNED NOT NULL,
  dateModified INT UNSIGNED NOT NULL,
  KEY `key_device` (devicePHID, `key`)
) ENGINE=InnoDB, COLLATE utf8_bin;