# Changelog

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
