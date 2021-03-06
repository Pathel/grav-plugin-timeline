<?php

namespace Bordeux\SchemaOrg\Thing\CreativeWork;

/**
 * Generated by bordeux/schema
 *
 * @author Krzysztof Bednarczyk <schema@bordeux.net>
 * @link http://schema.org/Clip
 *
 *
 * -------------------------------- ClipNumber ---------------------------------------------
 *
 * @property Integer|Integer[] clipNumber
 *
 * @method Integer|Integer[] getClipNumber() Position of the clip within an ordered group of clips.
 *
 * @method Clip setClipNumber(Integer $clipNumber ) setClipNumber(Integer[] $clipNumber )Position of the clip within an ordered group of clips.
 *
 *
 * -------------------------------- PartOfEpisode ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\CreativeWork\Episode|\Bordeux\SchemaOrg\Thing\CreativeWork\Episode[] partOfEpisode
 *
 * @method \Bordeux\SchemaOrg\Thing\CreativeWork\Episode|\Bordeux\SchemaOrg\Thing\CreativeWork\Episode[] getPartOfEpisode() The episode to which this clip belongs.
 *
 * @method Clip setPartOfEpisode(\Bordeux\SchemaOrg\Thing\CreativeWork\Episode $partOfEpisode ) setPartOfEpisode(\Bordeux\SchemaOrg\Thing\CreativeWork\Episode[] $partOfEpisode )The episode to which this clip belongs.
 *
 *
 * -------------------------------- PartOfSeason ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\CreativeWork\Season|\Bordeux\SchemaOrg\Thing\CreativeWork\Season[] partOfSeason
 *
 * @method \Bordeux\SchemaOrg\Thing\CreativeWork\Season|\Bordeux\SchemaOrg\Thing\CreativeWork\Season[] getPartOfSeason() The season to which this episode belongs.
 *
 * @method Clip setPartOfSeason(\Bordeux\SchemaOrg\Thing\CreativeWork\Season $partOfSeason ) setPartOfSeason(\Bordeux\SchemaOrg\Thing\CreativeWork\Season[] $partOfSeason )The season to which this episode belongs.
 *
 *
 * -------------------------------- PartOfSeries ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\CreativeWork\Series|\Bordeux\SchemaOrg\Thing\CreativeWork\Series[] partOfSeries
 *
 * @method \Bordeux\SchemaOrg\Thing\CreativeWork\Series|\Bordeux\SchemaOrg\Thing\CreativeWork\Series[] getPartOfSeries() The series to which this episode or season belongs.
 *
 * @method Clip setPartOfSeries(\Bordeux\SchemaOrg\Thing\CreativeWork\Series $partOfSeries ) setPartOfSeries(\Bordeux\SchemaOrg\Thing\CreativeWork\Series[] $partOfSeries )The series to which this episode or season belongs.
 *
 *
 * -------------------------------- Position ---------------------------------------------
 *
 * @property string|string[] position
 *
 * @method string|string[] getPosition() Free text to define other than pure numerical ranking of an episode or a season in an ordered list of items (further formatting restrictions may apply within particular user groups).
 *
 * @method Clip setPosition(string $position ) setPosition(string[] $position )Free text to define other than pure numerical ranking of an episode or a season in an ordered list of items (further formatting restrictions may apply within particular user groups).
 *
 *
 * -------------------------------- Publication ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Event\PublicationEvent|\Bordeux\SchemaOrg\Thing\Event\PublicationEvent[] publication
 *
 * @method \Bordeux\SchemaOrg\Thing\Event\PublicationEvent|\Bordeux\SchemaOrg\Thing\Event\PublicationEvent[] getPublication() A publication event associated with the episode, clip or media object.
 *
 * @method Clip setPublication(\Bordeux\SchemaOrg\Thing\Event\PublicationEvent $publication ) setPublication(\Bordeux\SchemaOrg\Thing\Event\PublicationEvent[] $publication )A publication event associated with the episode, clip or media object.
 *
 *
 */
 class Clip extends \Bordeux\SchemaOrg\Thing\CreativeWork {

 }