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
                    <form action="/rate" method="POST">
                        <h2>The questions</h2>
                        <div class="div_line">
                            <p>
                                How satisfied do you think the user felt after this conversation?
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
                                    <input type='checkbox' name='reason_satisfaction' value='user'>
                                    <label>The system was able to answer the users’ question(s)</label>
                                </li>
                                <li>
                                    <input type='checkbox' name='reason_satisfaction' value='interact'>
                                    <label>The system was able to interact with the user well</label>
                                </li>
                                <li>
                                    <input type='checkbox' name='reason_satisfaction' value='naturally'>
                                    <label>The user was able to talk to the system naturally</label>
                                </li>
                                <li>
                                    <label for="Other_satisfied">
                                        <input type="checkbox" name="reason_satisfaction" id="Other_satisfied" value="other">
                                        <input id="satisfied_other_text" class="propertytype_other" name="other_satisfied" type="text" value="" placeholder="other" class="form-control" width="80%">  
                                    </label>
                                </li>
                                <div class="checkbox" >
                                        
                                </div>
                            </ul>
                        </div>
                        <div class="div_line second_question" id="dissatisfied">
                            <p >
                                Please select the sentence or sentences where you think the user would be dissatisfied
                            </p>
                        </div>
                        <input type="hidden" name="conversation_id" value="{$conversation->ID()}"></input>
                        <input type="hidden" id="dis_sentences_reasons" name="reasons"></input>
                        <button type="submit" class="formsubmit float-right  mx-1" id="submitbtn" disabled >Submit >></button>
                        <button type="button" id="exitbtn" class="float-right mx-1">Exit</button> 
                        <br /><br />
                        Click <i>submit</i> to submit your annotation and click <i>exit</i> to return to the instructions.
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="/js/conv.js"></script>
{/block}
