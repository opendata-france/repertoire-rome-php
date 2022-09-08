<?php

require_once('../../vendor/autoload.php');

use OpendataFrance\RepertoireRome\AppellationRepository;
use OpendataFrance\RepertoireRome\FicheRepository;
use OpendataFrance\RepertoireRome\DomaineRepository;
use OpendataFrance\RepertoireRome\GrandDomaineRepository;

var_dump(GrandDomaineRepository::all());
var_dump(GrandDomaineRepository::find('A'));
var_dump(DomaineRepository::all('A'));
var_dump(DomaineRepository::find('A12'));
var_dump(FicheRepository::all('A12'));
var_dump(FicheRepository::find('A1202'));
var_dump(AppellationRepository::all('A1202'));
var_dump(AppellationRepository::find(11607));