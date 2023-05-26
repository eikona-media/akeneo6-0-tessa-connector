# Changelog

## 1.4.2 (2023-05-26)
* [fix] Fixed enterprise edition detection
* [fix] Fixed visualization of tessa attributes in proposals

## 1.4.1 (2023-02-09)
* Fixed Tessa asset controller

## 1.4.0 (2023-01-17)
* Removed Tessa gallery button

## 1.3.4 (2022-11-29)
* Fixed dependencies for Community Edition which prevented the installation

## 1.3.3 (2022-11-23)
* Fixed bugs in reference entities from patch 1.3.2

## 1.3.2 (2022-11-22)
* Fixed reference entities with akeneo asset as default image

## 1.3.1 (2022-11-17)
* Fixed completeness for Tessa asset attributes

## 1.3.0 (2022-11-15)
* Added english as fallback language
* Added the option to create reference entities with a Tessa asset as default image
* Added the version of the connector in the settings

## 1.2.0 (2022-11-09)
* Fixed Tessa background synchronization for large queues
* Added a setting to activate/deactivate the active synchronization with Tessa

## 1.1.1 (2022-11-02)
* Added the ability to add custom extensions in the attribute settings "Allowed extensions"

## 1.0.2 (2022-10-24)
* Fixed rare bug when updating an entry in the queue which was already processed in the meantime
* Fixed bug, which removed asset attribute values when reverting to an older version of a product

__Upgrade guide__
1) Empty the tessa notification queue (`eikona_media:tessa:notification_queue:execute`) or clearing the database table `eikona_media_tessa_notification_queue`
2) Update the database (`doctrine:schema:update --force`)

## 1.0.1 (2022-05-10)
* Fixed installation instructions

## 1.0.0 (2022-05-09)
* Initial release
