<?php

namespace AxlMedia\SportradarSdk;

class SoccerV4 extends Client
{
    /**
     * Initialize the class.
     *
     * @return void
     */
    public function __construct()
    {
        $this->placeholder(
            '/soccer/{access_level}/v4/{language_code}{endpoint}.{format}'
        );
    }

    /**
	 * Assing parameters form the original class
	 *
	 * @return object
	 */
    public function assignParameters($class) {
		$class->language($this->language);
		$class->offset($this->offset);
		$class->limit($this->limit);
		$class->league($this->leagueGroup);
		$class->domain($this->domain);

		return $class;

	}

    /**
     * Create a new Competition instance.
     *
     * @return \AxlMedia\SportradarSdk\Soccer\V4\Competition
     */
    public function competitions()
    {
        return $this->assignParameters(new Soccer\V4\Competition);
    }

    /**
     * Create a new Competitor instance.
     *
     * @return \AxlMedia\SportradarSdk\Soccer\V4\Competitor
     */
    public function competitors()
	{
		return $this->assignParameters(new Soccer\V4\Competitor);
    }

    /**
     * Create a new Player instance.
     *
     * @return \AxlMedia\SportradarSdk\Soccer\V4\Player
     */
    public static function players()
	{
		return $this->assignParameters(new Soccer\V4\Player);
    }

    /**
     * Create a new Season instance.
     *
     * @return \AxlMedia\SportradarSdk\Soccer\V4\Season
     */
    public function seasons()
    {
		return $this->assignParameters(new Soccer\V4\Season);
    }

    /**
     * Create a new SportEvent instance.
     *
     * @return \AxlMedia\SportradarSdk\Soccer\V4\SportEvent
     */
    public static function sportEvents()
    {
		return self::assignParameters(new Soccer\V4\SportEvent);
    }
}
