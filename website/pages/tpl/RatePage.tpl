{extends file='../../BaseTemplate.tpl'}
{block name=body}
    {* Rating conversation <b>{$id}</b> <br ><br>
    <pre>{$conversation}</pre>
    <br><br>
    Is this conversation satisfying?
    <form action="#" method="POST">
        <input type="radio" name="rating" value="yes"> Yes<br>
        <input type="radio" name="rating" value="no" > No<br>
        <input type="submit" value="Submit">
    </form>

    <a href="/index">Go back home</a>} *}

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-5 panel twocol">
                <h2>The converstation</h2>
                <p>This is some text.</p>
                </div>
                
                <div class="col-md-5 panel twocol">
                <h2>The questions</h2>
                <p>Was the conversation satisfying to the user?</p>
                <ul class="likert">
                        <li>Strongly agree</li>
                        <li><input type="radio" name="guilty" value="1" /></li>
                        <li><input type="radio" name="guilty" value="2" /></li>
                        <li><input type="radio" name="guilty" value="3" /></li>
                        <li><input type="radio" name="guilty" value="4" /></li>
                        <li><input type="radio" name="guilty" value="5" /></li>
                        <li>Strongly disagree</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
{/block}
