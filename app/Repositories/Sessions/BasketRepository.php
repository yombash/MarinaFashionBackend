<?php


namespace App\Repositories\Sessions;

use App\Repositories\Contracts\BasketRepositoryContract;
use Illuminate\Contracts\Session\Session;

class BasketRepository implements BasketRepositoryContract
{
    private Session $session;

    public function __construct(Session $session)
    {
        $this->session = $session;
    }

    public function identity($id):string {
        return 'basket.'.$id;
    }

    public function add(int $id, int $qty): void
    {
        $this->session->put($this->identity($id), $qty);
    }

    /**
     * @inheritDoc
     */
    public function getCurrentQty(int $id): int
    {
        return $this->session->get($this->identity($id),0);
    }

    /**
     * @inheritDoc
     */

    public function all(): array
    {
        return $this->session->get('basket',[]);
    }


}
