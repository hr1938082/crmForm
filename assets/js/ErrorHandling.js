import Api from './Api.js';

const ErrorHandling = async (data) => {
    try {
       return await Api(data.uri, data.body);
    }
    catch (e) {
        alert(e);
    }
}

export default ErrorHandling;