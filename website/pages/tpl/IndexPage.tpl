{extends file='../../BaseTemplate.tpl'}
{block name=body}
    {* We have the following conversations: <br><br>
    {if $act == 'rate'}
        Thanks for rating conversation <b>{$rate}</b>
    {/if}

    <ul>
    {foreach from=$convs item=conv}
        <li><a href="/rate/{$conv->ID()}">{$conv->identifier()}</a></li>
    {/foreach}
    </ul> *}

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-5 panel twocol">
                <h2>Chatbot image</h2>
                <p>This is some text.</p>
                </div>
                
                <div class="col-md-5 panel twocol">
                <h2>Instructions</h2>
                <p>This is some text.</p>
                </div>
            </div>
        </div>
    </section>
{/block}
