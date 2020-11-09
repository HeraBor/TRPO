<?php namespace Khoteev;

Class Equation
{
    public function a_solve($a, $b)
    {
        if ($a == 0) {
            throw new KhoteevException("Ошибка:уравнения не существует.");
        }
        return $this->X = array(-($b / $a));
    }

    protected $X;
}

?>