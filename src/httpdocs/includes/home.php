<div id="overlay"></div>

<div id="avb-home">
    <div class="container">
        <div class="hero-unit">
            <div id="welcome-hero">
                <?php
                  echo "<h1>".$homeTitle."</h1>";
                ?>
                <div class="home-column" id="home-col1" style=
                "display:inline-block;">
                    <p><?php echo $homeText1; ?></p>

                    <div style="margin-top: 25px;">
                        <div>
                            <?php echo $homeText2; ?>
                        </div>

                        <div style="display:inline-block;">
                            <?php echo $valuePr; ?>
                        </div>

                        <div style="display:inline-block;">
                            <span class="currencyinput">$</span>
                            <input class="currencyinput" placeholder=2000 data-section=
                            "expenses" id="tax-input" maxlength="6" name=
                            "tax-amount" onkeypress=
                            'avb.home.validate(event)' type="text">
                            <a class="link" data-section="expenses" id=
                            "tax-input-start" style=
                            "text-decoration:underline;">Start</a>
                        </div>
                    </div>
                </div>

                <div class="home-column" id="home-col2" style=
                "display:inline-block; margin-left:5%;">
                  <!-- <?php if (!$enterprise): ?> -->
<!--                     <div>
                        Start learning about <?php echo $shortName; ?>:

                        <div>
                            <a class='link' data-section="expenses" id='q1'
                            style='color:#db4e86'>What is the annual cost of the Fire Department?</a>
                        </div>

                        <div>
                            <a class='link' data-section="expenses" id='q2'
                            style='color:#db4e86'>How much money does the Town spend on schools?</a>
                        </div>

                        <div>
                            <a class='link' data-section="expenses" id='q3'
                            style='color:#db4e86'>How expensive is Snow &#38; Ice Removal?</a>
                        </div>
                    </div> -->
                  <!-- <?php endif ?> -->
                    <p style="margin-top:20px;"><a class="link" href=
                    "javascript:;" onclick="avb.home.hide(true);" style=
                    "text-decoration:underline;">Start the tour</a> or
                    <a class="link" href="javascript:;" onclick=
                    "avb.home.hide();" style=
                    "text-decoration:underline;">Dive in</a></p>
                </div>
            </div>

            <div id="home-col3">
                <div id="home-map-svg">
                    <div>
                        <div style="position: relative;height: 200px;">
                            <div class="node" data-section="revenues"
                            style="left: 0px; width: 100px;">
                                <div>
                                    Revenues
                                </div>

                                <div class="node-bar" id="revenues-node"
                                style=
                                " background-color: rgb(31, 119, 180);">
                                    <div class="node-value">
                                        11
                                    </div>
                                </div>
                            </div>

                            <div class="node" data-section="expenses"
                            style="left: 100px; width: 100px;">
                                <div>
                                    Expenses
                                </div>

                                <div class="node-bar" id="expenses-node"
                                style=" background-color: #56b356;">
                                    <div class="node-value">
                                        11
                                    </div>
                                </div>
                            </div>

                            <div class="node" data-section="funds" style=
                            "left: 200px; width: 100px;">
                                <div>
                                    Funds
                                </div>

                                <div class="node-bar" id="funds-node"
                                style=" background-color: #ff993e;">
                                    <div class="node-value">
                                        11
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
