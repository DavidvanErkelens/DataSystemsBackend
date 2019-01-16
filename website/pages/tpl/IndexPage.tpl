Hier komt de titel: {$title}. We have the following conversations: <br><br>

{if $act == 'rate'}
    Thanks for rating conversation <b>{$rate}</b>
{/if}

<ul>
{foreach from=$convs item=conv}
    <li><a href="/rate/{$conv->ID()}">{$conv->identifier()}</a></li>
{/foreach}
</ul>