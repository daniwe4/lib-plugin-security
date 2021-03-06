<?php

/* Copyright (c) 2018 Stefan Hecken <stefan.hecken@concepts-and-training.de> */

declare(strict_types=1);

namespace CaT\Security\PluginLogin;

interface AllowedUsernamesGUI
{
	public function getHtml(): string;
}