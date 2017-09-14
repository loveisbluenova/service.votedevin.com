<?php namespace Thujohn\Twitter\Traits;

use Exception;

Trait MediaTrait {

	/**
	 * Upload media (images) to Twitter, to use in a Tweet or Twitter-hosted Card.
	 *
	 * Parameters :
	 * - media
	 * - media_data
	 */
	public function uploadMedia($parameters = [])
	{
	        if (!array_key_exists('media', $parameters) && !array_key_exists('media_data', $parameters))
	        {
	            throw new Exception('Parameter required missing : media or media_data');
	        }

	        if (array_key_exists('media', $parameters) && array_key_exists('media_data', $parameters))
	        {
	            throw new Exception('You cannot use media and media_data at the same time');
	        }

		return $this->post('media/upload', $parameters, true);
	}

}
