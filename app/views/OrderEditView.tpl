{extends file="nowy_widok1.tpl"}

{block name=content}
    <header id="head" class="secondary"></header> 
    <div class="container">
              
        <ol class="breadcrumb">
            <li class="active">Panel administratora</li>
        </ol><br/>
        
        <div class="row">
            <article class="col-xs-12 maincontent">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form action="{$conf->action_root}orderSave" method="post" class="pure-form pure-form-aligned">
                                <legend>Dane zamówienia</legend>
                                <div class="top-margin">
                                    <label for="order_number">Numer zamówienia</label>
                                    <input id="order_number" type="text" placeholder="Numer zamówienia" name="order_number" value="{$form->order_number}">
                                </div>
                                <div class="top-margin">
                                    <label for="order_completed">Status</label>
                                    <input id="order_compleyec" type="text" placeholder="Status [0/1]" name="order_completed" value="{$form->order_completed}">
                                </div>
                                <div class="top-margin">
                                    <input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
                                    <a class="pure-button button-secondary" href="{$conf->action_root}orderList">Powrót</a>
                                </div>
                                <input type="hidden" name="IDorder" value="{$form->IDorder}">
                            </form>	
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
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
            </article>
        </div>
    </div>
{/block}

