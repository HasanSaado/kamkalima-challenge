import React, { Component } from 'react';
import { Alert } from 'react-bootstrap';

export class SuccessAlert extends Component {

    render() {
        return (
            <Alert variant="secondary" style={{width: '400px'}}>
                Your Formation Is Added Successfully!
            </Alert>
        )
    }
}