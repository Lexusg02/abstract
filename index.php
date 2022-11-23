<?php


interface AbstractIN{
    public function createMobile(): AbstractMobile;
    public function createPC(): AbstractPC;
}

class WinFactory implements AbstractIN{
    public function createMobile(): AbstractMobile
    {
        return new WinMobile();
    }

    public function createPC(): AbstractPC
    {
        return new WinPC();
    }

}

class MacFactory implements AbstractIN{
    public function createMobile(): AbstractMobile
    {
        return new MacMobile();
    }

    public function createPC(): AbstractPC
    {
        return new MacPC();
    }

}

interface AbstractMobile{
    public function useMobile();
}

class WinMobile implements AbstractMobile{
    public function useMobile()
    {
        return "result";
    }
}

class MacMobile implements AbstractMobile{
    public function useMobile()
    {
        return "result";
    }
}

interface AbstractPC{
    public function usePC();
}

class WinPC implements AbstractPC{
    public function usePC()
    {
        return "result";
    }
}

class MacPC implements AbstractPC{
    public function usePC()
    {
        return "result";
    }
}