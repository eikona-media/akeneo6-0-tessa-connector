# Changelog

## Unreleased
* Fixed rare bug when updating an entry in the queue which was already processed in the meantime
* Fixed bug, which removed asset attribute values when reverting to an older version of an product

__Upgrade guide__
1) Empty the tessa notification queue (`eikona_media_tessa_notification_queue`) or clearing the database table `eikona_media_tessa_notification_queue`
2) Update the database (`doctrine:schema:update --force`)

## 1.0.1 (2022-05-10)
* Fixed installation instructions

## 1.0.0 (2022-05-09)
* Initial release
