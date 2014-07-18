<?php
class geolocalisationFilter extends sfFilter
{
    public function execute($filterChain)
    {
        // get the request
        $request = $this->getContext()->getRequest();

        // Execute next filter in the chain
        $filterChain->execute();
    }
}