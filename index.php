<?php
    class Persona{

        private $nome;
        private $cognome;
        private $dataNascita;

        public function __construct($nome, $cognome){
            $this-> nome = $nome;
            $this-> cognome = $cognome;
        }

        public function setNome($nome){
            $this-> nome = $nome;
        }

        public function setCognome($cognome){
            $this-> cognome = $cognome;
        }

        public function setDataNascita($dataNascita){
            $this-> dataNascita = $dataNascita;
        }

        public function getNome(){
            return $this-> nome;
        }

        public function getCognome(){
            return $this-> cognome;
        }

        public function getDataNascita(){
           return $this-> dataNascita;
        }

        public function printFullPersone(){
            return $this-> nome . " " . $this-> cognome . ": " . $this-> dataNascita;
        }

        public function __toString(){
            return $this-> nome . " " . $this-> cognome . ": " . $this-> dataNascita; 
        }

    }
    class Employee extends Persona{
        
        private $stipendio;
        private $dataAssunzione;

        public function __construct($nome, $cognome, $stipendio){
            $this->nome = $nome;
            $this->cognome = $cognome;
            $this->stipendio = $stipendio;
        }

        public function setStipendio($stipendio){
            $this->stipendio = $stipendio;
        }

        public function setDataAssunzione($dataAssunzione){
            $this->dataAssunzione = $dataAssunzione;
        }

        public function getStipendio(){
            return $this->stipendio;
        }

        public function getDataAssunzione(){
            return $this->dataAssunzione;
        }

        public function printFullEmployee(){
            return $this-> nome . " " . $this-> cognome . ": " . $this-> stipendio . " (" . $this-> dataAssunzione . ")";
        }

        public function __toString(){
            return $this-> nome . " " . $this-> cognome . ": " . $this-> stipendio . " (" . $this-> dataAssunzione . ")"; 
        }
    }

    $persona1 = new Persona("Andrea", "Parisi");
    $persona2 = new Persona("Nicola", "Parisi");
    $persona1-> setDataNascita("10/40/30");
    $persona2-> setDataNascita("50/70/90");

    $employee1 = new Employee("Andrea", "Parisi","7000000£");
    $employee2 = new Employee("Andrea", "Cante","9000000£");

    $employee1-> setDataAssunzione("10/10/2010");
    $employee2-> setDataAssunzione("10/10/2040");

    echo $persona1 . "<br>";
    echo $persona2 -> printFullPersone() . "<br>";
    echo $employee1 . "<br>";
    echo $employee2-> printFullEmployee() . "<br>";
?>
