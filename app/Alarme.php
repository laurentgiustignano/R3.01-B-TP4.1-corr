<?php


namespace Iutrds\Tp41;

class Alarme {
  private \DateTime $heureAlarme;   // Heure à laquelle l'alarme doit sonner
  private bool $active = false;    // Etat de l'alarme, activée ou non
  private string $message;         // Message personnalisé de l'alarme

  // Activer l'alarme
  public function activer() : void {
    $this->active = true;
  }

  // Désactiver l'alarme
  public function desactiver() : void {
    $this->active = false;
  }

  // Obtenir l'état actuel de l'alarme (activée/désactivée)
  public function estActive() : bool {
    return $this->active;
  }

  // Vérifier si l'alarme doit se déclenchée
  public function verifierAlarme() : void {
    if($this->active && $this->isTimeForAlarme()) {
      $this->declencher();
    }
  }

  // Déclencher l'alarme
  private function declencher() : void {
    echo $this->message;
    $this->desactiver();
  }

  /**
   * Renvoie vrai si l'horaire actuel correspond à 'heureAlarm' à la minute prêt
   * @return bool
   */
  protected function isTimeForAlarme() : bool {
    // à compléter
    return false;
  }

  public function setMessage(string $message) : void {
    if(strlen($message) < 5 || strlen($message) > 51) {
      $this->message = "";
    }
    else
      $this->message = $message;
  }

  public function getMessage() : string {
    return $this->message;
  }

  public function __toString() : string {
    if($this->estActive()) {
      $retour = "L'alarme est activée et affichera ce message en se déclanchant : \"{$this->getMessage()}\" ";
    }
    else
      $retour = "L'alarme est désactivée";
    return $retour . PHP_EOL;
  }


  // Modifier l'heure de l'alarme
  public function setHeureAlarme(string $heure) : void {
    $this->heureAlarme = new \DateTime($heure);
  }

  // Obtenir l'heure de l'alarme
  public function getHeureAlarme() : string {
    return $this->heureAlarme->format('H:i');
  }

}
