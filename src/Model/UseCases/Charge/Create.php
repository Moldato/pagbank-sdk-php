<?php

namespace Moldato\PGB\Model\UseCases\Charge;

use Moldato\PGB\Model\UseCases\Session;
use Moldato\PGB\Model\Entity\Item;
use Moldato\PGB\Model\Entity\Shipping;
use Moldato\PGB\Model\Entity\Purchase;
use Moldato\PGB\Model\Entity\Customer;
use Moldato\PGB\Model\Entity\Seller;
use Moldato\PGB\Model\Entity\Method;

class Create {
  private Session $session;
  private string $mode; /** aceita a opção 'default'. */
  private Method $method; /** Moeda utilizada. Indica a moeda na qual o pagamento será feito. No momento, a única opção disponível é BRL (Real). */
  private string $currency = 'BRL';
  private Purchase $purchase;
  private Shipping $shipping;
  private string $notificationURL;
  public Seller $seller;
  public Customer $customer;
  private array $tens;

  /** vai varrer a lista de itens e só aceitará caso todos forem instanciad e ITEM  */
  protected function validateItens(array $itens){
    return true;
  }

  public function setItens(array $itens){
    if($this->validateItens($itens)){
      $this->itens = $itens;
    }
  }
}
