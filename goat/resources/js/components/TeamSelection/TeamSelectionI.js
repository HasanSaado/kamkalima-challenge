import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { AddFwModal_2 } from './AddFwModal_2';
import { AddFwModal_1 } from './AddFwModal_1';
import { AddMfModal_3 } from './AddMfModal_3';
import { AddMfModal_4 } from './AddMfModal_4';
import { AddMfModal_5 } from './AddMfModal_5';
import { AddMfModal_6 } from './AddMfModal_6';
import { AddDfModal_7 } from './AddDfModal_7';
import { AddDfModal_8 } from './AddDfModal_8';
import { AddDfModal_9 } from './AddDfModal_9';
import { AddDfModal_10 } from './AddDfModal_10';
import { AddGkModal_11 } from './AddGkModal_11';
import { SuccessAlert } from './SuccessAlert';
import { Badge, Button, Alert, Card } from 'react-bootstrap';

import Axios from 'axios';

class TeamSelection extends Component {

    constructor(props) {
        super(props);
        this.state = {
            deps: [],
            addModalShowGk: false,
            addModalShowMf_4: false,
            addModalShowMf_3: false,
            addModalShowFw_1: false,
            addModalShowFw_2: false,
            addModalShowMf_5: false,
            addModalShowMf_6: false,
            addModalShowDf_7: false,
            addModalShowDf_8: false,
            addModalShowDf_9: false,
            addModalShowDf_10: false,
            addModalShowGk_11: false,
            isLoaded: false,
            showFw_1: [],
            showFw_2: [],
            showMf_3: [],
            showMf_4: [],
            showMf_5: [],
            showMf_6: [],
            showDf_7: [],
            showDf_8: [],
            showDf_9: [],
            showDf_10: [],
            showGk_11: [],
            formation: [],
            alert_message: '',
            array_full: '',
            count: 1000,
            budget: ''
        }
        this.handleCheck = this.handleCheck.bind(this);
    }

    hideimage_1 = (e) => {
        this.setState({
            showFw_1: e
        }, () => {
            this.handleCheck();
        });
    }

    hideimage_2 = (e) => {
        this.setState({
            showFw_2: e
        }, () => {
            this.handleCheck();
        });
    }

    hideimage_3 = (e) => {
        this.setState({
            showMf_3: e
        }, () => {
            this.handleCheck();
        });
    }

    hideimage_4 = (e) => {
        this.setState({
            showMf_4: e
        }, () => {
            this.handleCheck();
        });
    }

    hideimage_5 = (e) => {
        this.setState({
            showMf_5: e
        }, () => {
            this.handleCheck();
        });
    }

    hideimage_6 = (e) => {
        this.setState({
            showMf_6: e
        }, () => {
            this.handleCheck();
        });
    }

    hideimage_7 = (e) => {
        this.setState({
            showDf_7: e
        }, () => {
            this.handleCheck();
        });
    }

    hideimage_8 = (e) => {
        this.setState({
            showDf_8: e
        }, () => {
            this.handleCheck();
        });
    }

    hideimage_9 = (e) => {
        this.setState({
            showDf_9: e
        }, () => {
            this.handleCheck();
        });
    }

    hideimage_10 = (e) => {
        this.setState({
            showDf_10: e
        }, () => {
            this.handleCheck();
        });
    }

    hideimage_11 = (e) => {
        this.setState({
            showGk_11: e
        }, () => {
            this.handleCheck();
        });
    }

    ClickFw_1() {
        this.setState({
            // addModalShow: true,
            addModalShowFw_1: true
        });
    }

    ClickFw_2() {
        this.setState({
            // addModalShow: true,
            addModalShowFw_2: true
        });
    }

    ClickMf_3() {
        this.setState({
            // addModalShow: true,
            addModalShowMf_3: true
        });
    }

    ClickMf_4() {
        this.setState({
            // addModalShow: true,
            addModalShowMf_4: true
        });
    }

    ClickMf_5() {
        this.setState({
            // addModalShow: true,
            addModalShowMf_5: true
        });
    }

    ClickMf_6() {
        this.setState({
            // addModalShow: true,
            addModalShowMf_6: true
        });
    }

    ClickDf_7() {
        this.setState({
            // addModalShow: true,
            addModalShowDf_7: true
        });
    }

    ClickDf_8() {
        this.setState({
            // addModalShow: true,
            addModalShowDf_8: true
        });
    }

    ClickDf_9() {
        this.setState({
            // addModalShow: true,
            addModalShowDf_9: true
        });
    }

    ClickDf_10() {
        this.setState({
            // addModalShow: true,
            addModalShowDf_10: true
        });
    }

    ClickGk_11() {
        this.setState({
            // addModalShow: true,
            addModalShowGk_11: true
        });
    }

    handleCounter = () => {
        var value_1 = this.state.showFw_1[3];
        var value_2 = this.state.showFw_2[3];
        var value_3 = this.state.showMf_3[3];
        var value_4 = this.state.showMf_4[3];
        var value_5 = this.state.showMf_5[3];
        var value_6 = this.state.showMf_6[3];
        var value_7 = this.state.showDf_7[3];
        var value_8 = this.state.showDf_8[3];
        var value_9 = this.state.showDf_9[3];
        var value_10 = this.state.showDf_10[3];
        var value_11 = this.state.showGk_11[3];
        var all_values = [value_1, value_2, value_3, value_4, value_5, value_6, value_7, value_8, value_9, value_10, value_11];
        for (var i = 0; i < all_values.length; i++) {
            if (all_values[i] == null) {
                all_values[i] = 0;
            }
            console.log(all_values[i]);
        }
        this.setState({budget: this.state.count - (all_values[0] + all_values[1] + all_values[2] + all_values[3] + all_values[4] + all_values[5] + all_values[6] + all_values[7] + all_values[8] + all_values[9] + all_values[10]) });
        console.log(this.state.budget);
    }

    handleCheck = () => {
        var picked_1 = this.state.showFw_1[4];
        var picked_2 = this.state.showFw_2[4];
        var picked_3 = this.state.showMf_3[4];
        var picked_4 = this.state.showMf_4[4];
        var picked_5 = this.state.showMf_5[4];
        var picked_6 = this.state.showMf_6[4];
        var picked_7 = this.state.showDf_7[4];
        var picked_8 = this.state.showDf_8[4];
        var picked_9 = this.state.showDf_9[4];
        var picked_10 = this.state.showDf_10[4];
        var picked_11 = this.state.showGk_11[4];
        const picked_all = [picked_1, picked_2, picked_3, picked_4, picked_5, picked_6, picked_7, picked_8, picked_9, picked_10, picked_11];
        console.log(picked_all);
        // for (var i = 0; i < picked_all.length; i++) {
        //     if (i == undefined) {
        //         break;
        //     }
        //     else {
        //         this.setState({ array_full: 'full' })
        //     }
        // }
        for (var i = 0; i < picked_all.length; i++) {
            if (picked_all.includes(undefined)) {
                continue;
            }
            else {
                this.setState({ array_full: 'full' });
            }
        }
        this.handleCounter();
    }

    handleSubmit = (event) => {
        var player_1 = this.state.showFw_1[4];
        var player_2 = this.state.showFw_2[4];
        var player_3 = this.state.showMf_3[4];
        var player_4 = this.state.showMf_4[4];
        var player_5 = this.state.showMf_5[4];
        var player_6 = this.state.showMf_6[4];
        var player_7 = this.state.showDf_7[4];
        var player_8 = this.state.showDf_8[4];
        var player_9 = this.state.showDf_9[4];
        var player_10 = this.state.showDf_10[4];
        var player_11 = this.state.showGk_11[4];
        var formation = [player_1, player_2, player_3, player_4, player_5, player_6, player_7, player_8, player_9, player_10, player_11];
        event.preventDefault();
        Axios.post('/post_formation', {
            formation: formation
        }).then(res => {
            this.setState({ alert_message: 'success' })
        })
    }

    render() {
        let addModalCloseFw_1 = () => this.setState({ addModalShowFw_1: false });
        let addModalCloseFw_2 = () => this.setState({ addModalShowFw_2: false });
        let addModalCloseMf_3 = () => this.setState({ addModalShowMf_3: false });
        let addModalCloseMf_4 = () => this.setState({ addModalShowMf_4: false });
        let addModalCloseMf_5 = () => this.setState({ addModalShowMf_5: false });
        let addModalCloseMf_6 = () => this.setState({ addModalShowMf_6: false });
        let addModalCloseDf_7 = () => this.setState({ addModalShowDf_7: false });
        let addModalCloseDf_8 = () => this.setState({ addModalShowDf_8: false });
        let addModalCloseDf_9 = () => this.setState({ addModalShowDf_9: false });
        let addModalCloseDf_10 = () => this.setState({ addModalShowDf_10: false });
        let addModalCloseGk_11 = () => this.setState({ addModalShowGk_11: false });

        return (
            <div>
                <hr />
                {this.state.alert_message == 'success' ? <SuccessAlert /> : null}
                <div style={{ marginLeft: 40, height: '100%' }}>
                    <img src='https://fantasy.premierleague.com/static/media/pitch.6892d4e8.svg' style={{ position: "absolute", marginLeft: 20, height: '140%', width: "75%" }} />
                    <div>
                        <div style={{ position: "absolute", marginLeft: 500, marginTop: 450 }}  >
                            {this.state.showFw_2.length == 0
                                ?
                                <button style={{padding: 0, border: 'none', background: 'none'}}><img id="1" src='./images/shirtbw.png' width='70%' height='70%' onClick={this.ClickFw_2.bind(this)} /></button>
                                :
                                <div>
                                    <img src={'./images/' + this.state.showFw_2[0] + '.png'} style={{ width: "50px", height: "65px" }} onClick={this.ClickFw_2.bind(this)} /> <br />
                                    <Badge variant="danger">
                                        {this.state.showFw_2[2]}
                                    </Badge>
                                    <Badge variant="warning">
                                        {this.state.showFw_2[3]}
                                    </Badge>
                                </div>
                            }
                            <AddFwModal_2 show={this.state.addModalShowFw_2} onHide={addModalCloseFw_2} hideimage_2={this.hideimage_2.bind(this)} />
                        </div>
                        <div style={{ position: "absolute", marginLeft: 300, marginTop: 450 }}   >
                            {this.state.showFw_1.length == 0
                                ? <button style={{padding: 0, border: 'none', background: 'none'}}><img src='./images/shirtbw.png' width='70%' height='70%' onClick={this.ClickFw_1.bind(this)} /></button>
                                :
                                <div>
                                    <img src={'./images/' + this.state.showFw_1[0] + '.png'} style={{ width: "50px", height: "65px" }} width='70%' height='70%' onClick={this.ClickFw_1.bind(this)} /> <br />
                                    <Badge variant="danger">
                                        {this.state.showFw_1[2]}
                                    </Badge>
                                    <Badge variant="warning">
                                        {this.state.showFw_1[3]}
                                    </Badge>
                                </div>
                            }
                            <AddFwModal_1 show={this.state.addModalShowFw_1} onHide={addModalCloseFw_1} hideimage_1={this.hideimage_1.bind(this)} />
                        </div>
                    </div>
                    <div>
                        <div style={{ position: "absolute", marginLeft: 500, marginTop: 310 }}   >
                            {this.state.showMf_3.length == 0
                                ? <button style={{padding: 0, border: 'none', background: 'none'}}><img src='./images/shirtbw.png' width='70%' height='70%' onClick={this.ClickMf_3.bind(this)} /></button>
                                :
                                <div>
                                    <img src={'./images/' + this.state.showMf_3[0] + '.png'} style={{ width: "50px", height: "65px" }} width='70%' height='70%' onClick={this.ClickMf_3.bind(this)} /> <br />
                                    <Badge variant="danger">
                                        {this.state.showMf_3[2]}
                                    </Badge>
                                    <Badge variant="warning">
                                        {this.state.showMf_3[3]}
                                    </Badge>
                                </div>
                            }
                            <AddMfModal_3 show={this.state.addModalShowMf_3} onHide={addModalCloseMf_3} hideimage_3={this.hideimage_3.bind(this)} />
                        </div>
                        <div style={{ position: "absolute", marginLeft: 300, marginTop: 310 }}   >
                            {this.state.showMf_4.length == 0
                                ? <button style={{padding: 0, border: 'none', background: 'none'}}><img src='./images/shirtbw.png' width='70%' height='70%' onClick={this.ClickMf_4.bind(this)} /></button>
                                :
                                <div>
                                    <img src={'./images/' + this.state.showMf_4[0] + '.png'} style={{ width: "50px", height: "65px" }} width='70%' height='70%' onClick={this.ClickMf_4.bind(this)} /> <br />
                                    <Badge variant="danger">
                                        {this.state.showMf_4[2]}
                                    </Badge>
                                    <Badge variant="warning">
                                        {this.state.showMf_4[3]}
                                    </Badge>
                                </div>
                            }
                            <AddMfModal_4 show={this.state.addModalShowMf_4} onHide={addModalCloseMf_4} hideimage_4={this.hideimage_4.bind(this)} />
                        </div>
                        <div style={{ position: "absolute", marginLeft: 130, marginTop: 310 }}   >
                            {this.state.showMf_5.length == 0
                                ? <button style={{padding: 0, border: 'none', background: 'none'}}><img src='./images/shirtbw.png' width='70%' height='70%' onClick={this.ClickMf_5.bind(this)} /></button>
                                :
                                <div>
                                    <img src={'./images/' + this.state.showMf_5[0] + '.png'} style={{ width: "50px", height: "65px" }} width='70%' height='70%' onClick={this.ClickMf_5.bind(this)} /> <br />
                                    <Badge variant="danger">
                                        {this.state.showMf_5[2]}
                                    </Badge>
                                    <Badge variant="warning">
                                        {this.state.showMf_5[3]}
                                    </Badge>
                                </div>
                            }
                            <AddMfModal_5 show={this.state.addModalShowMf_5} onHide={addModalCloseMf_5} hideimage_5={this.hideimage_5.bind(this)} />
                        </div>
                        <div style={{ position: "absolute", marginLeft: 675, marginTop: 310 }}   >
                            {this.state.showMf_6.length == 0
                                ? <button style={{padding: 0, border: 'none', background: 'none'}}><img src='./images/shirtbw.png' width='70%' height='70%' onClick={this.ClickMf_6.bind(this)} /></button>
                                :
                                <div>
                                    <img src={'./images/' + this.state.showMf_6[0] + '.png'} style={{ width: "50px", height: "65px" }} width='70%' height='70%' onClick={this.ClickMf_6.bind(this)} /> <br />
                                    <Badge variant="danger">
                                        {this.state.showMf_6[2]}
                                    </Badge>
                                    <Badge variant="warning">
                                        {this.state.showMf_6[3]}
                                    </Badge>
                                </div>
                            }
                            <AddMfModal_6 show={this.state.addModalShowMf_6} onHide={addModalCloseMf_6} hideimage_6={this.hideimage_6.bind(this)} />
                        </div>
                    </div>
                    <div>
                        <div style={{ position: "absolute", marginLeft: 210, marginTop: 150 }}   >
                            {this.state.showDf_7.length == 0
                                ? <button style={{padding: 0, border: 'none', background: 'none'}}><img src='./images/shirtbw.png' width='70%' height='70%' onClick={this.ClickDf_7.bind(this)} /></button>
                                :
                                <div>
                                    <img src={'./images/' + this.state.showDf_7[0] + '.png'} style={{ width: "50px", height: "65px" }} width='70%' height='70%' onClick={this.ClickDf_7.bind(this)} /> <br />
                                    <Badge variant="danger">
                                        {this.state.showDf_7[2]}
                                    </Badge>
                                    <Badge variant="warning">
                                        {this.state.showDf_7[3]}
                                    </Badge>
                                </div>
                            }
                            <AddDfModal_7 show={this.state.addModalShowDf_7} onHide={addModalCloseDf_7} hideimage_7={this.hideimage_7.bind(this)} />
                        </div>
                        <div style={{ position: "absolute", marginLeft: 340, marginTop: 150 }}   >
                            {this.state.showDf_8.length == 0
                                ? <button style={{padding: 0, border: 'none', background: 'none'}}><img src='./images/shirtbw.png' width='70%' height='70%' onClick={this.ClickDf_8.bind(this)} /></button>
                                :
                                <div>
                                    <img src={'./images/' + this.state.showDf_8[0] + '.png'} style={{ width: "50px", height: "65px" }} width='70%' height='70%' onClick={this.ClickDf_8.bind(this)} /> <br />
                                    <Badge variant="danger">
                                        {this.state.showDf_8[2]}
                                    </Badge>
                                    <Badge variant="warning">
                                        {this.state.showDf_8[3]}
                                    </Badge>
                                </div>
                            }
                            <AddDfModal_8 show={this.state.addModalShowDf_8} onHide={addModalCloseDf_8} hideimage_8={this.hideimage_8.bind(this)} />
                        </div>
                        <div style={{ position: "absolute", marginLeft: 480, marginTop: 150 }}   >
                            {this.state.showDf_9.length == 0
                                ? <button style={{padding: 0, border: 'none', background: 'none'}}><img src='./images/shirtbw.png' width='70%' height='70%' onClick={this.ClickDf_9.bind(this)} /></button>
                                :
                                <div>
                                    <img src={'./images/' + this.state.showDf_9[0] + '.png'} style={{ width: "50px", height: "65px" }} width='70%' height='70%' onClick={this.ClickDf_9.bind(this)} /> <br />
                                    <Badge variant="danger">
                                        {this.state.showDf_9[2]}
                                    </Badge>
                                    <Badge variant="warning">
                                        {this.state.showDf_9[3]}
                                    </Badge>
                                </div>
                            }
                            <AddDfModal_9 show={this.state.addModalShowDf_9} onHide={addModalCloseDf_9} hideimage_9={this.hideimage_9.bind(this)} />
                        </div>
                        <div style={{ position: "absolute", marginLeft: 610, marginTop: 150 }}   >
                            {this.state.showDf_10.length == 0
                                ? <button style={{padding: 0, border: 'none', background: 'none'}}><img src='./images/shirtbw.png' width='70%' height='70%' onClick={this.ClickDf_10.bind(this)} /></button>
                                :
                                <div>
                                    <img src={'./images/' + this.state.showDf_10[0] + '.png'} style={{ width: "50px", height: "65px" }} width='70%' height='70%' onClick={this.ClickDf_10.bind(this)} /> <br />
                                    <Badge variant="danger">
                                        {this.state.showDf_10[2]}
                                    </Badge>
                                    <Badge variant="warning">
                                        {this.state.showDf_10[3]}
                                    </Badge>
                                </div>
                            }
                            <AddDfModal_10 show={this.state.addModalShowDf_10} onHide={addModalCloseDf_10} hideimage_10={this.hideimage_10.bind(this)} />
                        </div>
                    </div>
                    <div>
                        <div style={{ position: "absolute", marginLeft: 400, marginTop: 60 }}   >
                            {this.state.showGk_11.length == 0
                                ? <button style={{padding: 0, border: 'none', background: 'none'}}><img src='./images/shirtbw.png' width='70%' height='70%' onClick={this.ClickGk_11.bind(this)} /></button>
                                : <div>
                                    <img src={'./images/' + this.state.showGk_11[0] + '.png'} style={{ width: "50px", height: "65px" }} width='70%' height='70%' onClick={this.ClickGk_11.bind(this)} /> <br />
                                    <Badge variant="danger">
                                        {this.state.showGk_11[2]}
                                    </Badge>
                                    <Badge variant="warning">
                                        {this.state.showGk_11[3]}
                                    </Badge>
                                </div>
                                //this is a comment
                            }
                            <AddGkModal_11 show={this.state.addModalShowGk_11} onHide={addModalCloseGk_11} hideimage_11={this.hideimage_11.bind(this)} />
                        </div>
                    </div>
                    <div style={{ position: "absolute", marginLeft: 100, marginTop: 20 }}>
                        Budget Remaining:
                        <Badge variant='danger'>{this.state.budget}</Badge>
                    </div>
                    {this.state.array_full == 'full' ?
                        <Button onClick={this.handleSubmit} variant="danger" style={{ position: "absolute", marginLeft: 350, marginTop: 700 }}>submit squad</Button>
                        :
                        <Button disabled variant="secondary" style={{ position: "absolute", marginLeft: 350, marginTop: 700 }}>submit squad</Button>
                    }
                </div>
            </div>
        );
    }
}

//  export default HomePage;
if(document.getElementById('teamselection')){
ReactDOM.render(<TeamSelection />, document.getElementById('teamselection'));
}