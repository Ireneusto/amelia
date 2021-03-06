{extends file="nowy_widok1.tpl"}

{block name=content}
    <header id="head" class="secondary"></header> 
    <div class="container">
              
        <ol class="breadcrumb">
            <li class="active">Panel administratora</li>
        </ol>
        
        <div class="row">
            <article class="col-xs-12 maincontent">
                <header class="page-header">
                    <h1 class="page-title">Zamówienia </h1>
                </header>
                
                <div class="bottom-margin">
                    <h3 class="page-title">Wyszukaj: </h3> 
                    <form action="{$conf->action_url}orderList" class="form-inline">
                        <input type="text" placeholder="Numer zamówienia..." name="order_number" value="{$searchForm->IDproduct}" class="form-control" style="width: 27em"/>
                        <button type="submit" class="btn btn-action"><i class="fa fa-search"></i></button>
                    </form>
                </div>	
                
                <div class="6u">				 
                    <a href="{$conf->action_root}productList" class="button">Produkty</a>
                    <a href="{$conf->action_root}customerList" class="button">Klienci</a>
                    <a href="{$conf->action_root}employeeList" class="button">Pracownicy</a>
                    <a href="{$conf->action_root}orderList" class="button">Zamówienia</a>
                    <a href="{$conf->action_root}logout">WYLOGUJ</a>
                </div> 
                
                <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID zamówienia</th>
                            <th>Data zamówienia</th>
                            <th>ID produktu</th>
                            <th>ID klienta</th>
                            <th>ID pracownika</th>
                            <th>Status</th>
                            <th>Opcje</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach $order as $o}
                        {strip}
                            <tr>
                                <td>{$o["IDorder"]}</td>
                                <td>{$o["order_date"]}</td>
                                <td>{$o["IDproduct"]}</td>
                                <td>{$o["IDcustomer"]}</td>
                                <td>{$o["IDemployee"]}</td>
                                <td>{$o["order_completed"]}</td>
                                <td>
                                    <a class="button-small pure-button button-secondary" href="{$conf->action_url}orderEdit/{$o['IDorder']}">Edytuj</a>
                                    &nbsp;
                                    <a class="button-small pure-button button-warning" href="{$conf->action_url}orderDelete/{$o['IDorder']}">Usuń</a>
                                </td>
                            </tr>
                        {/strip}
                        {/foreach}
                    </tbody>
                </table>
                </div>   
            </article>
        </div>
    </div>
{/block}

