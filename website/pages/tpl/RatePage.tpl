{extends file='../../BaseTemplate.tpl'}
{block name=body}
    <section>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-5 panel twocol">
                    <h2>The conversation
                        {* <button type="button" id="deselectAll" >Deselect all</button> 
                        <button type="button" id="selectAll" >Select all</button>  *}
                    </h2>
                    <div class="div_conversation">
                        {foreach from=$conversation->entries() key=id item=entry}
                            {if $entry->type() == 'user'}
                                <div class='con_line user'>
                            {else}
                                <div class='con_line system'>
                            {/if}

                            <input 
                                type='checkbox' 
                                value='{$entry->text()}'
                                disabled
                                name='conversation'
                                class='checkbox'
                                id='check{$id}'
                                data-toggle='popover'
                                data-placement='left'
                                data-container='body'
                                data-index='{$id}'
                            >

                            <label class='checklabel' for='check{$id}'>{$entry->text()}</label>
                            </div>
                        {/foreach}
                    </div>
                </div>

                <div class="col-md-5 panel twocol">
                    <form action="#" method="POST">
                        <h2>The questions</h2>
                        <div class="div_line">
                            <p>
                                How strongly do you agree with the following statement:
                            </p>
                            <p class="statement">
                                The user had a satisfying conversation with the systemversation
                            </p>
                            <div class="div_line likert">
                                <ul >
                                    <li>Not satisfied at all</li>
                                    <li><input type="radio" name="satisfaction" class="radio_sat" value="0" /></li>
                                    <li><input type="radio" name="satisfaction" class="radio_sat" value="1" /></li>
                                    <li><input type="radio" name="satisfaction" class="radio_sat" value="2" /></li>
                                    <li><input type="radio" name="satisfaction" class="radio_sat" value="3" /></li>
                                    <li><input type="radio" name="satisfaction" class="radio_sat" value="4" /></li>
                                    <li>Very satisfied</li>
                                </ul>
                            </div>
                        </div>
                        <div class="div_line second_question" id="satisfied">
                            <p>
                                Why do you think the user had a satisfying conversation? You can select mutliple answers.
                            </p>
                            <ul > 
                                <li>
                                    <input type='checkbox' name='reason_satisfaction' value='User'>
                                    <label>The system was able to answer the users’ question(s)</label>
                                </li>
                                <li>
                                    <input type='checkbox' name='reason_satisfaction' value='Interact'>
                                    <label>The system was able to interact with the user well</label>
                                </li>
                                <li>
                                    <input type='checkbox' name='reason_satisfaction' value='Naturally'>
                                    <label>The user was able to talk to the system naturally</label>
                                </li>
                                <li>
                                    <label for="Other_satisfied">
                                        <input type="checkbox" name="reason_satisfaction" id="Other_satisfied" value="other">
                                        <input id="satisfied_other_text" class="propertytype_other" name="propertytype_other" type="text" value="" placeholder="other" class="form-control" width="80%">  
                                    </label>
                                </li>
                                <div class="checkbox" >
                                        
                                </div>
                            </ul>
                        </div>
                        <div class="div_line second_question" id="dissatisfied">
                            <p >
                                Please select sentence(s) where you think the user would be dissatisfied
                            </p>
                        </div>
                        <input type="text" id="dis_sentences_reasons"></input>
                        <button type="button" >Exit</button> 
                        <button type="button" class="formsubmit" id="submitbtn" disabled >Submit >></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="/js/conv.js"></script>
{/block}
