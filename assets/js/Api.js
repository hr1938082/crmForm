const Api = async (uri, data) => {
    const Postdata = await fetch(uri, {
        method: "POST",
        headers: {
            "Content-type": "application/json",
            "Accept": "application/json",
            "Access-Control-Allow-Origin": "*"
        },
        body: JSON.stringify(data)
    });
    return await Postdata.json();
}

export default Api;