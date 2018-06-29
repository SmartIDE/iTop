<?php

// Copyright (C) 2010-2018 Combodo SARL
//
//   This file is part of iTop.
//
//   iTop is free software; you can redistribute it and/or modify	
//   it under the terms of the GNU Affero General Public License as published by
//   the Free Software Foundation, either version 3 of the License, or
//   (at your option) any later version.
//
//   iTop is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU Affero General Public License for more details.
//
//   You should have received a copy of the GNU Affero General Public License
//   along with iTop. If not, see <http://www.gnu.org/licenses/>

namespace Combodo\iTop\Form\Field;

/**
 * A field for Dates and Date & Times, supporting custom formats
 */
class DateTimeField extends StringField
{
	protected $sJSDateTimeFormat;
	protected $sPHPDateTimeFormat;
	protected $bDateOnly;

	/**
	 * Overloaded constructor
	 *
	 * @param string $sId
	 * @param Closure $onFinalizeCallback (Used in the $oForm->AddField($sId, ..., function() use ($oManager, $oForm, '...') { ... } ); )
	 */
	public function __construct($sId, Closure $onFinalizeCallback = null)
	{
		parent::__construct($sId, $onFinalizeCallback);
		$this->bDateOnly = false;
	}

	/**
	 * Get the PHP format string
	 *
	 * @return string
	 */
	public function GetPHPDateTimeFormat()
	{
		return $this->sPHPDateTimeFormat;
	}

	/**
	 *
	 * @param string $sDateTimeFormat
	 *
	 * @return \Combodo\iTop\Form\Field\DateTimeField
	 */
	public function SetPHPDateTimeFormat($sDateTimeFormat)
	{
		$this->sPHPDateTimeFormat = $sDateTimeFormat;

		return $this;
	}

	/**
	 * @return string
	 */
	public function GetJSDateTimeFormat()
	{
		return $this->sDateTimeFormat;
	}

	/**
	 *
	 * @param string $sDateTimeFormat
	 *
	 * @return \Combodo\iTop\Form\Field\DateTimeField
	 */
	public function SetJSDateTimeFormat($sDateTimeFormat)
	{
		$this->sDateTimeFormat = $sDateTimeFormat;

		return $this;
	}

    /**
     * Set the DateOnly flag
     *
     * @param boolean $bDateOnly
     *
     * @return \Combodo\iTop\Form\Field\DateTimeField
     */
	public function SetDateOnly($bDateOnly)
	{
		$this->bDateOnly = $bDateOnly;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function IsDateOnly()
	{
		return $this->bDateOnly;
	}

}
