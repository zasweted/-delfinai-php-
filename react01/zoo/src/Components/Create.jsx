import { useState } from "react";


function Create({setCreateData}) {


    const [type, setType] = useState('');
    const [weight, setWeight] = useState('');
    const [tail, setTail] = useState(false);

        const add = () => {
            const data = {
                type,
                weight,
                tail: tail ? 1 : 0
            }
            setType('');
            setWeight('');
            setTail(false);
            setCreateData(data);
        }

    return (

        <>
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-12">
                        <div className="card m-4">
                            <div className="card-header">
                                <h2>New Animal</h2>
                            </div>
                            <div className="card-body">

                                <div className="form-group">
                                    <label>Type</label>
                                    <input type="text" value={type} onChange={e=> setType(e.target.value)} className="form-control" />
                                    <small className="form-text text-muted">Animal type</small>
                                </div>
                                <div className="form-group">
                                    <label>Weight</label>
                                    <input type="text" value={weight} onChange={e=> setWeight(e.target.value)} className="form-control" />
                                    <small className="form-text text-muted">Animal weight in kg</small>
                                </div>
                                <div className="form-group form-check">
                                    <input type="checkbox" name="tail" className="form-check-input" value="1" checked={tail} onChange={() =>setTail(t=> !t)} />
                                    <label className="form-check-label">Has tail?</label>
                                </div>
                                <button type="submit" className="btn btn-primary mt-5"  onClick={add}>Submit</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </>

    )

}


export default Create;