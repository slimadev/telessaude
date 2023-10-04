<?php

namespace App\Http\Services;


class DashboardUserDTO
{
    public int $professional;
    public int $parceiro;
    public int $docente;
    public int $estudante;

    public function __construct(int $professional=0, int $parceiro = 0,$docente=0, $estudante=0) {
        $this->professional = $professional;
        $this->parceiro =$parceiro;
        $this->docente =$docente;
        $this->estudante =$estudante;
    }
    
}

?>
