<?php

namespace Malwarebytes\AltamiraBundle\Altamira\Type\JqPlot;

class Bar extends \Malwarebytes\AltamiraBundle\Altamira\Type\TypeAbstract
{

	public function getOptions()
	{
		$opts = array();

		$first = array();
		$second = array();
        if (isset($this->axisRenderer) && $this->axisRenderer) {
		    $first['renderer'] = '#' . $this->axisRenderer . '#';
        }
		if(isset($this->options['ticks']))
			$first['ticks'] = $this->options['ticks'];

		if(isset($this->options['min'])) {
			$second['min'] = $this->options['min'];
		} else {
			$second['min'] = 0;
		}

		if(isset($this->options['horizontal']) && $this->options['horizontal']) {
			$opts['xaxis'] = $second;
			$opts['yaxis'] = $first;
		} else {
			$opts['xaxis'] = $first;
			$opts['yaxis'] = $second;
		}

		$opts = array('axes' => $opts);

		if(isset($this->options['stackSeries']))
			$opts['stackSeries'] = $this->options['stackSeries'];

		if(isset($this->options['seriesColors']))
			$opts['seriesColors'] = $this->options['seriesColors'];

		return $opts;
	}

	public function getRendererOptions()
	{
		$opts = array();
		if(isset($this->options['horizontal']) && $this->options['horizontal'])
			$opts['barDirection'] = 'horizontal';

                // TODO allowedOptions isn't even set, what gives?
		/*foreach($this->allowedOptions as $item) {
			if(isset($this->options[$item]))
				$opts[$item] = $this->options[$item];
		}*/

		return $opts;
	}

	public function getUseTags()
	{
		if(isset($this->options['horizontal']) && $this->options['horizontal'])
			return true;

		return false;
	}
}

?>
