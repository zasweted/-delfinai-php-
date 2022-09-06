import { useEffect } from "react";
import { useState } from "react";

function Edit({ setModalData, modalData, setEditData }) {

    const [type, setType] = useState('');
    const [weight, setWeight] = useState('');
    const [tail, setTail] = useState(false);

    useEffect(() => {
        if(null === modalData){
            return;
        }
        console.log(modalData);
        setType(modalData.type);
        setWeight(modalData.weight);
        setTail(modalData.tail);
    }, [modalData]);

    const close = () => {
        setModalData(null);
    }

    const save = () => {
        setEditData({
            type,
            weight,
            tail: tail ? 1 : 0,
            id: modalData.id
        });
        setModalData(null);
    }

    if (modalData === null) {
        return null;
    }

    return (

        <>
            <div className="modal">
                <div className="modal-dialog modal-dialog-centered" role="document">
                    <div className="modal-content">
                        <div className="modal-header">
                            <h5 className="modal-title">Edit Animal</h5>
                            <button type="button" className="close" onClick={() => close()}>
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div className="modal-body">
                            <div className="card-body">

                                <div className="form-group">
                                    <label>Type</label>
                                    <input type="text" value={type} onChange={e => setType(e.target.value)} className="form-control" />
                                    <small className="form-text text-muted">Animal type</small>
                                </div>
                                <div className="form-group">
                                    <label>Weight</label>
                                    <input type="text" value={weight} onChange={e => setWeight(e.target.value)} className="form-control" />
                                    <small className="form-text text-muted">Animal weight in kg</small>
                                </div>
                                <div className="form-group form-check">
                                    <input type="checkbox" name="tail" className="form-check-input" value="1" checked={tail} onChange={() => setTail(t => !t)} />
                                    <label className="form-check-label">Has tail?</label>
                                </div>
                                

                            </div>
                        </div>
                        <div className="modal-footer">
                            <button type="button" className="btn btn-primary" onClick={save}>Save changes</button>
                            <button type="button" className="btn btn-secondary" onClick={() => close()}>Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </>
    )

}
export default Edit;