{extends file="nowy_widok1.tpl"}

{block name=content}
    <header id="head" class="secondary"></header> 
    <div class="container">
              
        
        <div class="row">
            <article class="col-xs-12 maincontent">
                <header class="page-header">
                    <h1 class="page-title">Klienci </h1>
                </header>
                
                <div class="bottom-margin">
                    <h3 class="page-title">Wyszukaj: </h3>
                    <form action="{$conf->action_url}customerList" class="form-inline">
                        <input type="text" placeholder="Nazwisko..." name="surname" value="{$searchForm->surname}" class="form-control" style="width: 27em"/>
                        <button type="submit" class="btn btn-action"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                        
                <div class="6u">				 
                    <a href="{$conf->action_root}productList" class="button">Produkty</a>
                    <a href="{$conf->action_root}customerList" class="button">Klienci</a>
                    <a href="{$conf->action_root}employeeList" class="button">Pracownicy</a>
                    <a href="{$conf->action_root}orderList" class="button">Zamówienia</a>
                </div> 
                
                <div class="bottom-margin">
                    <a class="pure-button button-success" href="{$conf->action_root}customerNew">+ nowy klient</a>
                    <a class="pure-button button-error" href="{$conf->action_root}customerList">lista</a>
                </div>	
                
                <div class="top-margin">
                {block name=messages}
                {if $msgs->isMessage()}
                    <div class="messages">
                        <ul>
                        {foreach $msgs->getMessages() as $msg}
                        {strip}
                            <li class="msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if} {if $msg->isInfo()}info{/if}">{$msg->text}</li>
                        {/strip}
                        {/foreach}
                        </ul>
                    </div>
                {/if}
                {/block}
                </div>
                <div class="table-responsive">
                <table class='table'>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Imię</th>
                            <th>Nazwisko</th>
                            <th>Nr telefonu</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach $customer as $c}
                        {strip}
                            <tr>
                                <td>{$c["IDcustomer"]}</td>
                                <td>{$c["name"]}</td>
                                <td>{$c["surname"]}</td>
                                <td>{$c["phone_number"]}</td>
                                <td style='display:flex'>
                                    <a class="button-small pure-button button-secondary" href="{$conf->action_url}customerEdit/{$c['IDcustomer']}">Edytuj</a>
                                    &nbsp;
                                    <a class="button-small pure-button button-warning" href="{$conf->action_url}customerDelete/{$c['IDcustomer']}">Usuń</a>
                                </td>
                            </tr>
                        {/strip}
                        {/foreach}
                    </tbody>
                </table>
                </div>
                <div class="top-margin">
                    {if !({$IDproduct} == '')}
                        <a class="pure-button button-secondary" style="float:right" href="{$conf->action_root}productList">wróć do listy produktów</a>
                    {/if}
                </div>
            </article>
        </div>
    </div>
{/block}

