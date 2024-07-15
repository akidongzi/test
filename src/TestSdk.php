<?php

namespace Test\Sdk;

class TestSdk
{
    protected  $data = ["aaa"=>"123"];

    public function setSdkVersion($version){
        $this->data['sdk_version'] = $version;
        return $this;
    }
    public function setSdkType($type){
        $this->data['sdk_type'] = $type;
        return $this;
    }
    public function getData()
    {
        return $this->data;
    }
}